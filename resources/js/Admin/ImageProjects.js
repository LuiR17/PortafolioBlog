document.addEventListener('DOMContentLoaded', () => {

    const form = document.querySelector('form');
    const editor = document.getElementById('editor');
    const contentInput = document.getElementById('content');

    const openBtn = document.getElementById('open-image-picker');
    const editorImageInput = document.getElementById('editorImageInput');

    /* =========================
       GUARDAR CONTENIDO EDITOR
    ========================== */
    if (form && editor && contentInput) {
        form.addEventListener('submit', () => {
            contentInput.value = editor.innerHTML;
        });
    }

    /* =========================
       ABRIR PICKER DE IMÁGENES
    ========================== */
    if (openBtn && editorImageInput) {
        openBtn.addEventListener('click', () => {
            editorImageInput.click();
        });
    }

    /* =========================
       SUBIR IMAGEN DEL EDITOR
    ========================== */
    if (editorImageInput) {
        editorImageInput.addEventListener('change', async function () {

            const file = this.files[0];
            if (!file) return;

            const formData = new FormData();
            formData.append('image', file);

            const response = await fetch(
                editorImageInput.dataset.uploadUrl,
                {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': editorImageInput.dataset.csrf,
                    },
                    body: formData
                }
            );

            const data = await response.json();

            insertImageAtCursor(data.url);

            // Limpia el input para permitir subir la misma imagen otra vez
            this.value = '';
        });
    }

});

/* =========================
   INSERTAR IMAGEN EN CURSOR
========================== */
function insertImageAtCursor(url) {

    const img = document.createElement('img');
    img.src = url;
    img.className = 'my-4 rounded-lg max-w-full';

    const selection = window.getSelection();
    if (!selection.rangeCount) return;

    const range = selection.getRangeAt(0);
    range.insertNode(img);
    range.collapse(false);
}
