<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         /* Modal Styles */
    .modal {
        /* display: none; */
        position: fixed;
        top: 0;
        left: 10cm  ;
        width: 100%;
        height: 100%;
        padding:1cm;
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
        background-color: seagreen;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    </style>
    
</head>
<body>
        <!-- Modal Form -->

    <div id="modal" class="modal">
        <div class="modal-content">
            <h2>Schedule New Meeting</h2>
            <form action="./meetings.php" method="post">
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
</body>
</html>