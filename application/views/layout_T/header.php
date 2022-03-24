<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>GreatHotel &rsaquo; <?= $title ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <!-- Select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/assets/css/components.css">
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/icon.png">
    <style>
        .ignielToTop {
            visibility: hidden;
            width: 50px;
            height: 50px;
            position: fixed;
            bottom: 50px;
            right: 20px;
            z-index: 99;
            cursor: pointer;
            border-radius: 100px;
            opacity: 0;
            -webkit-transform: translateZ(0);
            transition: all 0.5s;
            background: #6777f0 url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;
        }

        .ignielToTop:hover {
            opacity: 1;
            background: #1d2129 url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;
        }

        .ignielToTop.show {
            visibility: visible;
            bottom: 20px;
            opacity: 1;
        }
    </style>
</head>