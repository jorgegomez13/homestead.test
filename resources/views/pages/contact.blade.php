<title>Pagina | Contacts</title>
@extends('layouts.default')
@section('content')

<div class="row"><table>
            <tr><div class="form-group col-sm-6">
                <label for="name" class="h4">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" required>
            </div></tr>
            <tr><div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div></tr>
        </div></tr>
       <tr><div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
        </div></tr>
        <td><button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
<tr><div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div></tr></table>

@stop
