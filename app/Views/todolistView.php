<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-size: cover;
            background-image: url('background1.jpg');
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 80%;
            max-width: 900px;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.95);
            border-top-left-radius: 50% 20%;
            border-bottom-right-radius: 50% 20%;
        }

        h2 {
            color: #ff6392;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }

        /* Form Styles */
        .form-inline {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            gap: 15px; /* Adds space between form elements */
        }

        .form-group {
            flex: 1;
            margin-right: 20px; /* Increased right margin for better spacing */
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            background-color: #fef7f2;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: #d6a2e8;
            background-color: #fff0e6;
        }

        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: 20px;
            font-weight: 500;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary {
            background-color: #ff6392;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #d94877;
            transform: translateY(-2px);
        }

        .btn-danger {
            background-color: #ff6392;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #d94877;
            transform: translateY(-2px);
        }

        .todo-item {
            background-color: #fafafa;
            border: 1px solid #eee;
            border-radius: 20px;
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .task {
            font-size: 1rem;
            color: #333;
        }

        .actions .btn {
            margin-left: 10px;
        }

        .alert {
            background-color: #ffebf0;
            border: 1px solid #ffccd5;
            color: #ff6392;
            border-radius: 20px;
            padding: 15px;
            text-align: center;
            font-size: 1rem;
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .form-inline {
                flex-direction: column;
            }

            .form-group {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .actions .btn {
                margin-left: 0;
                margin-top: 10px;
            }

            .todo-item {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>To Do List</h2>

    <!-- Form to add new tasks -->
    <form action="<?= site_url('/todolist/add') ?>" method="POST" class="form-inline">
        <div class="form-group">
            <input type="text" name="task" class="form-control" placeholder="Tambah tugas baru..." required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Tugas</button>
    </form>

    <!-- Display todo list -->
    <?php if (!empty($todos)): ?>
        <?php foreach ($todos as $todo): ?>
            <div class="todo-item <?= $todo['status'] == 'completed' ? 'completed' : '' ?>">
                <div class="task">
                    <?= esc($todo['task']) ?>
                </div>
                <div class="actions">
                    <?php if ($todo['status'] == 'pending'): ?>
                        <a href="<?= site_url('/todolist/complete/'.$todo['id']) ?>" class="btn btn-primary">Selesai</a>
                    <?php else: ?>
                        <button class="btn btn-primary" disabled>Selesai</button>
                    <?php endif; ?>
                    <a href="<?= site_url('/todolist/delete/'.$todo['id']) ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="alert" role="alert">
            Tidak ada tugas tersedia
        </div>
    <?php endif; ?>
</div>

</body>
</html>
