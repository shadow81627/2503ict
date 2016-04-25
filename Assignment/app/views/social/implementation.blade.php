@extends('layouts.master')

@section('post')
<p>
I used lab4 task4 to create the navigation bar which has a home button in the 
top left, create post and display post with the laravel framework as the home 
page for the web application. </p>

<p>The posts are displayed in most recent to least recent. Each post has a icon, 
title, message and username. The posts display the number of comments they have. </p>

<p>The posts have edit, delete and view comments links. The edit button links to 
the edit page which has a form for editing a contact and has a cancel button 
which takes you back to the home page. When the update button is pressed the 
page redirects to the post detials page.</p>

<p>The view comments button takes you to a new page and displays all of the 
comments for that post and allows you take make new comments.</p>

<p>The view comments page contains a form to add a new comment to the post.
Comments have a delete button and no edit button. 
Deleting a comment redirects to the view comments page.
</p>
@stop

@section('content')
<img src="https://bytebucket.org/s5014219/2503ict/raw/eab62fc77d7dccdfe3f66244599ad8610833af0c/Assignment/app/database/2503ict%20Social%20Network%20Database.png?token=3605f575508f4dd95302f8a5766a6309dcd9167d">
@stop
