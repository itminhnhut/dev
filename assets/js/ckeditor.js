$(document).ready(function(){
  var url = $("input[name='BASE_URL']").val();
  CKEDITOR.replace( 'content',
  {
    filebrowserBrowseUrl : url+'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : url+'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : url+'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : url+'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : url+'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : url+'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    toolbar:[
    { name: 'document', items : [ 'Source','-','Templates' ] },
    { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
    { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
    { name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
    'HiddenField' ] },
    '/',
    { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
    { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
    '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
    { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
    { name: 'insert', items : [ 'Image','MediaEmbed','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
    '/',
    { name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
    { name: 'colors', items : [ 'TextColor','BGColor' ] },
    { name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
    ]
  });
  var pathname_web = document.location.pathname;
  var n =pathname_web.indexOf('pages');
  if(n !== 10)
  {
      CKEDITOR.replace( 'des', {
          toolbar: [
          [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
          [ 'FontSize', 'TextColor', 'BGColor' ]
          ]
      });
  }

});