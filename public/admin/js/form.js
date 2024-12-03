// Slug

document.addEventListener("DOMContentLoaded", function () {
    // Ambil elemen input nama dan slug
    const nameInput = document.getElementById("name-input");
    const slugInput = document.getElementById("slug-input");

    // Fungsi untuk mengubah teks menjadi slug
    function generateSlug(text) {
        return text
            .toLowerCase() // Mengubah semua huruf menjadi kecil
            .replace(/[^\w\s-]/g, "") // Menghapus karakter yang bukan huruf/angka/spasi/strip
            .trim() // Menghapus spasi di awal dan akhir
            .replace(/\s+/g, "-"); // Mengganti spasi dengan strip
    }

    // Pantau perubahan pada input nama
    nameInput.addEventListener("input", function () {
        const nameValue = nameInput.value;
        const slugValue = generateSlug(nameValue);
        slugInput.value = slugValue; // Isi input slug
    });
});

// @formatter:off
document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect &&
        new TomSelect((el = document.getElementById("select-categories")), {
            copyClassesToDropdown: false,
            dropdownParent: "body",
            controlInput: "<input>",
            render: {
                item: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
                option: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
            },
        });
});

document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect &&
        new TomSelect((el = document.getElementById("select-types")), {
            copyClassesToDropdown: false,
            dropdownParent: "body",
            controlInput: "<input>",
            render: {
                item: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
                option: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
            },
        });
});
// @formatter:on

// @formatter:off
document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect &&
        new TomSelect((el = document.getElementById("select-tags")), {
            copyClassesToDropdown: false,
            dropdownParent: "body",
            controlInput: "<input>",
            render: {
                item: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
                option: function (data, escape) {
                    if (data.customProperties) {
                        return (
                            '<div><span class="dropdown-item-indicator">' +
                            data.customProperties +
                            "</span>" +
                            escape(data.text) +
                            "</div>"
                        );
                    }
                    return "<div>" + escape(data.text) + "</div>";
                },
            },
        });
});
// @formatter:on

document
    .getElementById("thumbInput")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const imgPreview = document.getElementById("imgPreview");
                const previewImage = document.getElementById("previewImage");
                previewImage.src = e.target.result;
                imgPreview.classList.remove("d-none");
            };
            reader.readAsDataURL(file);
        }
    });

document.getElementById("removeImage").addEventListener("click", function () {
    const imgPreview = document.getElementById("imgPreview");
    const thumbInput = document.getElementById("thumbInput");
    imgPreview.classList.add("d-none");
    thumbInput.value = "";
});

document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener("trix-attachment-add", function(event) {
        if (event.attachment.file) {
            uploadFile(event.attachment);
        }
    });

    function uploadFile(attachment) {
        let formData = new FormData();
        formData.append('file', attachment.file);

        fetch('/admin/post/upload-file', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json().then(data => ({ status: response.status, body: data })))
        .then(({ status, body }) => {
            if (status === 200 && body.url) {
                attachment.setAttributes({ url: body.url });
            } else if (status === 422 && body.errors) {
                // Validasi gagal
                alert('Gagal mengunggah file: ' + Object.values(body.errors).flat().join('\n'));
                attachment.remove();
            } else {
                alert('Terjadi kesalahan saat mengunggah file.');
                attachment.remove();
            }
        })
        .catch(() => {
            alert('Gagal mengunggah file. Pastikan Anda hanya mengunggah gambar atau video yang sesuai.');
            attachment.remove();
        });
    }
});

document.getElementById('fileInput').addEventListener('change', function(event) {
    const fileInput = event.target;
    const filePreview = document.getElementById('filePreview');
    const files = fileInput.files;

    // Clear previous preview
    filePreview.innerHTML = '';

    const remainingFiles = [];
    
    // Loop through selected files
    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        // Create a container for each file preview
        const fileDiv = document.createElement('div');
        fileDiv.classList.add('file-item', 'd-flex', 'align-items-center', 'mb-2');

        // Create a span for file name
        const fileName = document.createElement('span');
        fileName.textContent = file.name;
        fileName.classList.add('me-2');

        // Create a button to remove the file
        const removeButton = document.createElement('i');
        removeButton.classList.add('fas', 'fa-times-circle', 'text-danger', 'cursor-pointer');
        removeButton.title = 'Hapus File';
        removeButton.style.cursor = 'pointer';

        // Add click event to remove the file
        removeButton.addEventListener('click', function() {
            fileDiv.remove(); // Remove the file from the preview
            // Remove the file from the file input
            const fileArray = Array.from(fileInput.files);
            const updatedFiles = fileArray.filter(f => f !== file);
            const dataTransfer = new DataTransfer();
            updatedFiles.forEach(f => dataTransfer.items.add(f));
            fileInput.files = dataTransfer.files;
            
            // Optionally reset the file input if necessary
            if (filePreview.children.length === 0) {
                fileInput.value = ''; // Clear file input
            }
        });

        // Append the file name and remove button to the file div
        fileDiv.appendChild(fileName);
        fileDiv.appendChild(removeButton);

        // Append the file preview div to the filePreview container
        filePreview.appendChild(fileDiv);

        // Add the file to the remainingFiles array
        remainingFiles.push(file);
    }

    // Update the file input with remaining files
    const dataTransfer = new DataTransfer();
    remainingFiles.forEach(file => dataTransfer.items.add(file));
    fileInput.files = dataTransfer.files;
});
