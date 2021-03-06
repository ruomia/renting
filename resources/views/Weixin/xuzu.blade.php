<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title>房屋续租</title>
	<link rel="stylesheet" type="text/css" href="/css/weixin/base.css" />
	<link rel="stylesheet" type="text/css" href="/css/weixin/tuizu.css" />
</head>
<body>
<form action="{{route('weixin_xuzu')}}" method="post" id="submit">
			{{csrf_field()}}
		<div class="stitle">请输入您的真实姓名:</div>
		<input type="text"  placeholder="请输入您的真实姓名..." name="username" />
		<div class="stitle">请输入您的手机号码:</div>
		<input type="text" placeholder="请输入您的手机号码..." name="phone"/>
		<div class="stitle">请输入您的身份证号码:</div>
		<input type="text"  placeholder="请输入您的身份证号码..." name="idcard" />
		<div class="stitle">请输入您的地址(包括小区楼层以及房间号):</div>
		<input type="text"  placeholder="请输入您的地址(包括小区楼层以及房间号)..." name="address" />
		<input type="hidden" name="village" value="{{session('village')}}">
		<div class="stitle" id="job">请选择您续租的时长:</div>
		<div class="weui_cell weui_cell_select">
			<div class="weui_cell_bd weui_cell_primary">
				<select class="weui_select" name="select">
					<!-- 十二为一年 -->
					<option value="1" selected>一个月</option>
					<option value="3">三个月</option>
					<option value="6">半年</option>
					<option value="12">一年</option>
				</select>
			</div>
		</div>
		<ul>
			@foreach($errors->all() as $e)
				<li style="color: red">{{$e}}</li>
			@endforeach
		</ul>
		<div class="back"   onclick="submit()">提交续租申请</div>
</form>
</body>
</html>
<script>
	function submit() {
        var form = document.getElementById('submit');
        //再次修改input内容
        form.submit();
    }
</script>