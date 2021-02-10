@extends('layouts.userlayout')

@section('content')
        <div class="contents">
        <h3>
            ชื่อผู้จอง </h3>
             <table id="entry" class="list">
        <tbody>
        <tr>
            <td>Description:</td>
        <td></td>
        </tr>
        <tr>
            <td>Confirmation status:</td>
            <td></td>
        </tr>
        <tr>
            <td>Approval status:</td>
            <td></td>
        </tr>
        <tr>
            <td>Room:</td>
            <td></td>
        </tr>
        <tr>
            <td>Start time:</td>
            <td></td>
        </tr>
        <tr>
            <td>Duration:</td>
            <td></td>
        </tr>
        <tr>
            <td>End time:</td>
            <td></td>
        </tr>
       
        <tr>
            <td>Created by</td>
            <td></td>
        </tr>
        </table>
        <br>

            <div id="view_entry_nav">
        <div>
        <div>
            <form action="edit_entry.php" method="post">
            <input type="hidden" name="csrf_token" value="9a73d6a6ae03a1821494db7e5f1dc287a7a14eaf86884fe01b58af7e031c5ebb">
            <input type="hidden" name="id" value="87613">
            <input type="hidden" name="returl" value="day.php?year=2021&amp;month=2&amp;day=27&amp;area=8&amp;room=20">
            <input type="submit" value="Edit Entry">
        </form>
        </div>
        </div>
        <br>
        <div>
        <div>
            <form action="del_entry.php" method="post">
            <input type="hidden" name="csrf_token" value="9a73d6a6ae03a1821494db7e5f1dc287a7a14eaf86884fe01b58af7e031c5ebb">
            <input type="hidden" name="id" value="87613">
            <input type="hidden" name="series" value="0">
            <input type="hidden" name="returl" value="day.php?year=2021&amp;month=2&amp;day=27&amp;area=8&amp;room=20">
            <input type="submit" value="Delete Entry" onclick="return confirm('Are you sure you want to delete this entry?');">
        </form>
        </div>
        </div>
        <br>
        <div>
        <div>
            <form action="edit_entry.php" method="post">
            <input type="hidden" name="csrf_token" value="9a73d6a6ae03a1821494db7e5f1dc287a7a14eaf86884fe01b58af7e031c5ebb">
            <input type="hidden" name="id" value="87613">
            <input type="hidden" name="copy" value="1">
            <input type="hidden" name="returl" value="day.php?year=2021&amp;month=2&amp;day=27&amp;area=8&amp;room=20">
            <input type="submit" value="Copy Entry">
        </form>
        </div>
        </div>
        <br>
        <div>
        <div>
            <form action="view_entry.php" method="post">
            <input type="hidden" name="csrf_token" value="9a73d6a6ae03a1821494db7e5f1dc287a7a14eaf86884fe01b58af7e031c5ebb">
            <input type="hidden" name="id" value="87613">
            <input type="hidden" name="action" value="export">
            <input type="hidden" name="returl" value="day.php?year=2021&amp;month=2&amp;day=27&amp;area=8&amp;room=20">
            <input type="submit" value="Export Entry">
        </form>
        </div>
        <br>
        </div>
        </div>
            <div id="returl">
            <a href="http://www.lib.buu.ac.th/roombooking/day.php?year=2021&amp;month=2&amp;day=27&amp;area=8&amp;room=20">Return to previous page</a>
        </div>
        </div>
@endsection