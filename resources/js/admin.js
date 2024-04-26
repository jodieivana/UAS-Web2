function updateStatus(status, dropdownId) {
        // Ubah teks tombol dropdown sesuai dengan status yang dipilih
        if (status === 'Resolved') {
            document.getElementById(`resolvedDropdown${dropdownId}`).innerText = 'Resolved';
            document.getElementById(`resolvedDropdown${dropdownId}`).className = 'btn btn-primary dropdown-toggle';
        } else {
            document.getElementById(`resolvedDropdown${dropdownId}`).innerText = 'Not Resolved';
            document.getElementById(`resolvedDropdown${dropdownId}`).className = 'btn btn-danger dropdown-toggle';
        }
        // Tambahkan kode lain di sini untuk mengirim permintaan atau melakukan tindakan lain sesuai dengan status yang dipilih
}

