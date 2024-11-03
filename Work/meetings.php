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
        /* left:6cm; */
        right:0;
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

    main{
    position:relative;
    }



    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        animation: fadeIn 0.3s ease;
    }

    .modal-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        width: 400px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        animation: slideIn 0.3s ease;
    }

    /* Animation Keyframes */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideIn {
        from { transform: translateY(-20px); }
        to { transform: translateY(0); }
    }

    /* Form Input Styling */
    .modal-content input, .modal-content textarea {
        width: 100%;
        padding: 8px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .close-btn, .submit-btn {
        background-color: red;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
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

<main>

<button style="position:absolute; left:-13.5cm;top:-5cm;padding:20px;border:0;background:red;color:white;border-radius:10px;font-size:20px;cursor:pointer;">Schedule new </button>
<div class="cards">
    <?php
    $cards = [
        ['title' => 'People to attend', 'description' => '27', 'link' => 'login.html'],
        ['title' => 'Meeting leader', 'description' => '5', 'link' => 'login.html'],
        ['title' => 'Starting time', 'description' => '5', 'link' => 'login.html'],
    ];

    foreach ($cards as $cardData) {
        $title = $cardData['title'];
        $description = $cardData['description'];
        $link = $cardData['link'];
        include 'cards.php';
    }
    ?>
</div>


    <!-- Schedule Button -->
    <button onclick="openModal()" style="position:absolute; left:-13.5cm;top:-5cm;padding:20px;border:0;background:red;color:white;border-radius:10px;font-size:20px;cursor:pointer;">Schedule new </button>

    <!-- Modal Form -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h2>Schedule New Meeting</h2>
            <form>
                <label for="meetingID">Meeting ID:</label>
                <input type="text" id="meetingID" name="meetingID" required>

                <label for="leader">Leader:</label>
                <input type="text" id="leader" name="leader" required>

                <label for="startAt">Start At:</label>
                <input type="time" id="startAt" name="startAt" required>

                <label for="endAt">Ends At:</label>
                <input type="time" id="endAt" name="endAt" required>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>

                <div style="display: flex; justify-content: space-between; margin-top: 1rem;">
                    <button type="button" class="close-btn" onclick="closeModal()">Cancel</button>
                    <button type="submit" class="submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th class="checkbox-cell"></th>
                <th>Meeting ID</th>
                <th>Leader</th>
                <th>Start_At</th>
                <th>Ends_At</th>
                <th>Dates</th>
                <th>status</th>
                <th>location</th>
                <th class="actions-cell">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample rows -->
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">Done</span></td>
                <td data-label="status">playground</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
                <td class="actions-cell" data-label="Actions">
                    <a href="#" class="action-edit">Edit</a>
                    <a href="#" class="action-delete">Delete</a>
                </td>
            </tr>
            <tr>
                <td class="checkbox-cell"><input type="checkbox" /></td>
                <td data-label="meeting">001</td>
                <td data-label="F-Name">Bahirwa Frank</td>
                <td data-label="L-time">12:20</td>
                <td data-label="time">3:20</td>
                <td data-label="dates">5/10/2024</td>
                <td data-label="location"><span class="status-in-stock">play ground</span></td>
                <td data-label="status">Done</td>
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

</body>
<script>
    
    function openModal() {
        document.getElementById('modal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

</script>
</html>
