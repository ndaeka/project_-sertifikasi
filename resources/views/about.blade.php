@extends('layouts.main')

@section('container')
    <h3><?php echo $nama ?></h3>
    <h3><?php echo $email ?></h3>
    <p><img src="img/<?php echo $image ?>" alt="" width="400"></p>
 @endsection
    