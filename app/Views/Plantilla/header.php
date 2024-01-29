<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #droppable, #categoria1, #categoria2,#categoria3,#categoria4{ width: 250px; height: 250px; padding: 0.5em; float: left; margin: 10px; border: 2px dashed green;}
        #draggable, #draggable-nonvalid { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
        #draggable-nonvalid img, #draggable img, #draggable-1 img,#draggable-2 img,#draggable-3 img,#draggable-4 img,#draggable-5 img,#draggable-6 img,#draggable-7 img,
        #draggable-8 img,#draggable-9 img,#draggable-10 img,#draggable-11 img,#draggable-12 img,#draggable-13 img,#draggable-14 img,#draggable-15 img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;  /* Ajusta el z-index según sea necesario */
        }

        .draggable-item {
            width: 100px;
            height: 100px;
            background-color: lightblue;
            margin: 10px;
            padding: 10px;
            text-align: center;
        }

        .custom-hover-class {
            border: 2px dashed green;
        }
    </style>
    <script type="importmap">
    {
        "imports": {
        "three": "https://unpkg.com/three@0.149.0/build/three.module.js",
        "three/addons/": "https://unpkg.com/three@0.149.0/examples/jsm/"
        }
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>