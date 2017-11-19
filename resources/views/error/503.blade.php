<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Manh Hung
 * Date: 11/18/2017
 * Time: 10:00 PM
 */
?>
<div class="container">
    <div class="content">
        <div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>
                        Co loi say ra !
                    </strong>
                    </br>
                    </br>
                    <ul>
                        @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
