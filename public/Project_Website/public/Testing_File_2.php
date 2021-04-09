<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'Margins/Header.php'; ?>
    <title>Log in</title>
</head>
<br>
<br>
<br>
<br>
<body class="p-4">
<div class="container">
    <?php include 'Nav_Bar/Nav-Bar.php'; ?>
</br>
</br>
</br>
    <!-- Button HTML (to Trigger Modal) -->
    <input type="button" class="btn btn-lg btn-primary show-modal" value="Show Demo Modal">
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you want to save changes you made to document before closing?</p>
                    <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



<?php
require_once '../src/Scripts.php';
require_once 'Margins/Footer.php';
?>