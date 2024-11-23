<script src="<?= base_url(); ?>/js/dash-script.js"></script>
<script>
    function openModall() {
        document.getElementById('discussionModal').style.display = 'flex';
    }

    function closeModall() {
        document.getElementById('discussionModal').style.display = 'none';
    }

    function sendMessage() {
        var input = document.getElementById('commentInput').value;
        if (input.trim() !== "") {
            var chatContainer = document.querySelector('.chat-container');
            var message = document.createElement('div');
            message.classList.add('message');
            message.innerHTML = `<p><strong>You:</strong> ${input}</p>`;
            chatContainer.appendChild(message);
            chatContainer.scrollTop = chatContainer.scrollHeight; // Auto-scroll to bottom
            document.getElementById('commentInput').value = ''; // Clear input
        }
    }
</script>

<script>
    function openModal() {
        document.getElementById('lostItemModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('lostItemModal').style.display = 'none';
    }

    function submitLostItem() {
    // Ambil nilai dari form
    const itemName = document.getElementById('item').value;
    const itemDescription = document.getElementById('des').value;
    const itemDate = document.getElementById('tanggal').value;
    const itemLocation = document.getElementById('lokasi').value;
    const contactInfo = document.getElementById('kontak').value;

    // Kirim data ke server dengan AJAX
    fetch('<?= base_url('/lostitem/saveItem') ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            item: itemName,
            des: itemDescription,
            tanggal: itemDate,
            lokasi: itemLocation,
            kontak: contactInfo
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert('Data berhasil disimpan');
            closeModal(); // Tutup modal
        } else {
            alert('Gagal menyimpan data');
        }
    })
    .catch(error => console.error('Error:', error));
}

        // Tutup modal setelah submit
        closeModal();
</script>


<script>
    $('#tombolSimpan').on('click',function(){
        var $item = $('#item').val();
        var $des = $('#des').val();
        var $tanggal = $('#tanggal').val();
        var $lokasi = $('#lokasi').val();
        var $kontak = $('#kontak').val();

        $.ajax({
            url: "<?php echo site_url("Item/simpan")?>",
            type:"POST",
            success: function(hasil){
                alert(hasil);

            }
        });
        
    });
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</body>

</html>