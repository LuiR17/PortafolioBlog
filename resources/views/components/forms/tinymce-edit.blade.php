<textarea id="editor-container" name="content">
    {!! $content !!}
</textarea>

<script src="https://cdn.tiny.cloud/1/3brea3q3jq6th5hxhca7f0xymq9uv2128n9rl5ohylr6djud/tinymce/8/tinymce.min.js"></script>

<script>
tinymce.init({
  selector: '#editor-container',
  plugins: 'code table lists image link',
  toolbar: 'undo redo | blocks | bold italic | bullist numlist | image link | code',
  images_upload_url: '{{ route('admin.projects.upload-image') }}',
  images_upload_credentials: true,
  paste_data_images: false,
});
</script>

    