@extends('layout.app')

@section('cabecera')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
    <style>
      .sesiones{
        height: 700px;
        background-image: url('image/6EzNuwW5.jpg');
        background-repeat: no-repeat;
        background-position: center;
        
        position: relative;
        
      }
      .sesiones:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.7);
      }
      .sesiones img{
        border: 1px solid red;
      }
    </style>
</head>
@endsection