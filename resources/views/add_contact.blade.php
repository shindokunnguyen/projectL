<h1>Contact TODOParrot</h1>
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
{{csrf_field()}}
<form class="form-control" name="" id="" method="post" action="{{url('save_contact')}}">
    <div class="form-group">
        Contact Name: <input type="text" name="contact_name" id="contact_name" value="" style="width: 100px"/>
    </div>

    <div class="form-group">
        Contact Email: <input type="text" name="contact_email" id="contact_id" value="" style="width: 100px;"/>
    </div>

    <div class="form-group">
        Contact Phone: <input type="text" name="contact_phone" id="contact_phone" style="width: 100px;"/>
    </div>

    <div class="form-group">
        <button type="submit" style="width: 60px">
            Save Contact
        </button>

    </div>
</form>

