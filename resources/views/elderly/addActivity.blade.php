@extends('elderly.template')
@section('title')
เพิ่มกิจกรรม ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/addActivitys.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
	<div class="container">
		<div class="addactivity z-depth-2 center-align"><h4>เพิ่มกิจกรรม ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต</h4></div>
		
		<div class="card card-define col m12">
		<div class="row">
      		<form class="col s12">
        		<div class="row">
          			<div class="input-field col s6">
            			<input id="input_text" type="text" name="title">
            			<label for="input_text">กิจกรรมเรื่อง</label>
          			</div>
        		</div>
        		<div class="row">
          			<div class="input-field col s12">
            			<textarea id="textarea1" class="materialize-textarea" name="content"></textarea>
            			<label for="textarea1">รายละเอียดของกิจกรรม</label>
          			</div>
        		</div>
      		</form>
    	</div>

    	<form action="#">
    		<div class="file-field input-field">
      			<div class="btn waves-effect waves-light">
        			<span>เลือกรูปภาพ</span>
        			<input type="file" multiple>
      			</div>
      			<div class="file-path-wrapper">
        			<input class="file-path validate" type="text" placeholder="Upload one or more files">
      			</div>
    		</div>
  		</form>
		</div>
  		<div class="row">
            <div class="col s6 right-align">
                <button type="submit" class="agree waves-effect waves-light btn-large">ตกลง</button>
            </div>
            <div class="col s6">
                <a class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
        </div>
	</div>

@endsection

@section('footer')
@endsection

@section('script')
<script src="{{ URL::asset('/elderly/js/activity.js') }}"> </script>
@endsection