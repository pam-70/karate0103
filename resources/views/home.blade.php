@extends('layouts.app')
4444444444
{{Auth::user()->type}}
@if(Auth::user()->type==="admin")
11-07
    @extends('admin')
   
@endif





