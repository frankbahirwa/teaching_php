<?php require "./layout.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f3f5;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        gap: 3rem;
        left:6cm;
        padding: 2rem;
        position:fixed;
        top:2cm;
        justify-content: center;
    }

    /* Responsive container */
    .table-container {
        overflow-x: auto; /* Enable horizontal scroll if needed */
        overflow-y: auto; /* Enable vertical scroll */
        height: 60%; /* Set a fixed height for the table container */
        margin: 1rem 0;
        margin-bottom:3cm;
        width: 82%;
        position: fixed;
        padding-bottom:2cm;
        top:7cm;
        left: 6.8cm;
        border-radius: 5px;
        box-shadow: 0px 0px 12px lightgray;
    }

    /* Basic table styling */
    .table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        font-size: 0.875rem;
    }

    /* Header row styling */
    .table thead tr {
        background-color: #f7f7f7;
        font-weight: bold;
    }

    .table th, .table td {
        padding: 0.75rem;
        border-bottom: 1px solid #e0e0e0;
    }

    /* Checkbox cell width */
    .table .checkbox-cell {
        width: 5%;
    }

    /* Actions cell */
    .table .actions-cell {
        text-align: center;
        width: 10%;
    }

    .table .status-low {
        color: #ff5252;
        font-weight: bold;
    }

    .table .status-in-stock {
        color: #4caf50;
        font-weight: bold;
    }

    .table tbody tr:hover {
        background-color: #f0f4f8;
        transition: background-color 0.3s;
    }

    main {
        position: relative;
        height: 100vh;
        overflow-y: auto; 
    }

    @media (max-width: 768px) {
        .table thead {
            display: none;
        }
        
        .table tr {
            display: block;
            margin-bottom: 1rem;
            border-bottom: 1px solid #ddd;
        }

        .table td {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem;
        }

        .table td:before {
            content: attr(data-label);
            font-weight: bold;
            width: 50%;
        }
    }
</style>
</head>
<body>
    <form action="homepage.php">

<main>


<div class="cards">
    <?php
    $cards = [
        ['title' => 'Current Team Players', 'description' => '27', 'link' => 'login.html'],
        ['title' => 'Pending Matches', 'description' => '5', 'link' => 'login.html'],
        ['title' => 'Leaders & Coaches', 'description' => '5', 'link' => 'login.html'],
        ['title' => 'Pending Meetings', 'description' => '5', 'link' => 'login.html']
    ];

    foreach ($cards as $cardData) {
        $title = $cardData['title'];
        $description = $cardData['description'];
        $link = $cardData['link'];
        include 'cards.php';
    }
    ?>
</div>
<button  style="border:0; padding:5px; background:seagreen;"><a style="color:white; text-decoration:none;" href="./player.php">add new </a></button>
<div class="table-container">
    <button  style="border:0; padding:5px; background:seagreen;"><a style="color:white; text-decoration:none;" href="./player.php">add new </a></button>
    <table class="table">
        <thead>
            <tr>
                <th class="checkbox-cell"></th>
                <th>Prayer ID</th>
                <th>F-Name</th>
                <th>L-Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Status</th>
                <th>Attendance</th>
                <th class="actions-cell">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample rows -->
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>    
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
                        <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="Prayer_id">001</td>
                <td data-label="F-Name">Anitha</td>
                <td data-label="L-Name">Uwihirwe</td>
                <td data-label="Age">100</td>
                <td data-label="Position">5</td>
                <td data-label="Status"><span class="status-in-stock">Available</span></td>
                <td data-label="Attendance">Attended</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>

            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

</main>  
</form>                

</body>
</html>
