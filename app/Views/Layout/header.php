<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link to Bootstrap CSS and JS -->

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/dash-style.css">
    <style>
        /* Modal styling */
        /* Form styling */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Modal style */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .modal-content {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 90%;
            max-width: 400px;
            max-height: 80%;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        h2 {
            margin: 0 0 15px 0;
        }

        .chat-container {
            flex: 1;
            overflow-y: auto;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            max-height: 300px;
        }

        .message {
            margin-bottom: 10px;
        }

        .message p {
            margin: 0;
            font-size: 14px;
        }

        .comment-section {
            display: flex;
            align-items: center;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        textarea {
            width: 100%;
            height: 40px;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ddd;
            resize: none;
        }

        button {
            background-color: #3897f0;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 20px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #287dcf;
        }



        /* Styling for the entire card */
        .lost-item-card {
            display: block;
            width: 100%;
            max-width: 350px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            margin: 20px auto;
            text-align: left;
        }

        .lost-item-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Image container */
        .image-container {
            width: 100%;
            height: 0;
            padding-bottom: 75%;
            /* Maintain 4:3 aspect ratio */
            overflow: hidden;
            position: relative;
            background-color: #f0f0f0;
        }

        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            padding: 15px;
            transition: transform 0.3s ease;
        }

        .item-post {
            border-radius: 20px;
        }

        .lost-item-card:hover .image-container img {
            transform: scale(1.05);
            /* Zoom in on hover */
        }

        /* Text container */
        .text-container {
            padding: 20px;
            font-family: 'Arial', sans-serif;
        }

        /* Title */
        .text-container h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        /* Description */
        .text-container .description {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 15px;
            line-height: 1.6;
            max-height: 50px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Details styling */
        .text-container .details {
            font-size: 0.9rem;
            color: #444;
            margin-bottom: 8px;
        }

        /* Hover effect for text */
        .lost-item-card:hover .text-container h3 {
            color: #0056b3;
        }




        .active {
            display: flex;
            align-items: center;
        }

        .profile-pic {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
            margin-left: 10px;
        }

        .role {
            font-size: 12px;
            color: gray;
            margin-left: 5px;
        }


        /* Kontainer utama dengan background dan border radius */
        .profile-container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 25px;
            margin: 0 auto;
        }

        /* Layout bagian profil */
        .profile-section {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: center;
        }

        .profile-user {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .user-info {
            flex-grow: 1;
            margin-left: 20px;
        }

        .user-stats {
            display: flex;
            gap: 50px;
        }

        .stat-item {
            text-align: center;
            font-size: 16px;
        }

        /* Tombol navigasi */
        .buttons {
            margin-top: 20px;
            display: flex;
            gap: 20px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        .edit-profile {
            margin-left: 700px;
        }


        /* Kartu postingan */
        .post-grid {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }

        .post-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 200px;
            text-align: center;
        }

        .post-image {
            width: 100%;
            height: auto;
        }

        .post-info {
            padding: 10px;
        }
    </style>

    <title>Pages</title>
</head>

<body>