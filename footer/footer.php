<!-- Contact / Footer -->
<footer id="contact" class="text-center text-md-start">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-6 mb-3 mb-md-0">
                <h5 class="fw-bold">Randi Studio</h5>
                <p>Jl. Randi, Medan</p>
                <p>Telp: <a href="tel:+6281234567890">+62 1213131313</a></p>
                <p>Email: <a href="mailto:info@randi.com">info@randistudio.com</a></p>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-md-end gap-3">
                <a href="#" aria-label="Facebook" class="text-decoration-none text-white fs-4"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="Instagram" class="text-decoration-none text-white fs-4"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="WhatsApp" class="text-decoration-none text-white fs-4"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>
        <div class="text-center small pb-3">© 2025 Randi Studio. All rights reserved.</div>
    </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- WhatsApp Booking Script -->
<script>
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const name = document.getElementById('name').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const date = document.getElementById('date').value;
        const packageSelected = document.getElementById('package').value;

        if (!name || !phone || !date || !packageSelected) {
            alert('Mohon lengkapi semua data!');
            return;
        }

        // Ganti nomor WhatsApp studio Anda (format internasional tanpa +)
        const studioNumber = '6281806132508';

        const message = `Halo, saya ingin melakukan booking photo studio dengan detail berikut:%0A` +
            `Nama: ${name}%0A` +
            `Nomor WA: ${phone}%0A` +
            `Tanggal dan Jam: ${date}%0A` +
            `Paket: ${packageSelected}`;

        const whatsappURL = `https://wa.me/${studioNumber}?text=${message}`;

        window.open(whatsappURL, '_blank');
    });
</script>

</body>

</html>