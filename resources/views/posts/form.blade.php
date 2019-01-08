@include('layouts.form_error')
<div class="form-group">
    <label for="title"><strong>標題*</strong></label>
    {{ Form::text('title',null,['id'=>'title','class' => 'form-control', 'placeholder' => '請輸入標題','required'=>'required']) }}
</div>
<div class="form-group">
    <label for="content"><strong>內文*</strong></label>
    {{ Form::textarea('content', null, ['id' => 'content', 'class' => 'form-control', 'rows' => 10, 'placeholder' => '請輸入內容','required'=>'required']) }}
</div>
<div class="form-group">
    <label for="files[]">附件( 不大於5MB )</label>
    {{ Form::file('files[]', ['class' => 'form-control','multiple'=>'multiple']) }}
</div>
<div class="form-group">
    <a href="#" class="btn btn-secondary btn-sm" onclick="history.back();"><i class="fas fa-backward"></i> 返回</a>
    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('確定儲存？')">
        <i class="fas fa-save"></i> 儲存設定
    </button>
</div>
