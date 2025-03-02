import Quill from 'quill';
import 'quill/dist/quill.snow.css';
window.Quill = Quill;

document.addEventListener("DOMContentLoaded", function () {
    const quillElement = document.querySelector("#quill-editor");

    if (quillElement) {
        const quill = new Quill("#quill-editor", {
            theme: "snow",
            placeholder: "Write something...",
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    ['link', 'image'],
                    ['clean']
                ]
            }
        });

        document.querySelector("form").onsubmit = function () {
            document.querySelector("#content").value = quill.root.innerHTML;
        };
    }
});
