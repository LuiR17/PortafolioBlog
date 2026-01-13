<script src="https://cdn.tiny.cloud/1/3brea3q3jq6th5hxhca7f0xymq9uv2128n9rl5ohylr6djud/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
<script>
  tinymce.init({
    selector: 'textarea#editor-container', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
    images_upload_url: '{{ route('admin.projects.upload-image') }}',
    images_upload_credentials: true,
    paste_data_images: false,
  });
</script>