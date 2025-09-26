    // Mendapatkan referensi ke elemen select dan textbox
    const selectBox = document.getElementById('id_book');
    const grandtotal = document.getElementById('payment_total');
    const boxDetailOrder = document.getElementById('col-detail-order');
    // ambil id detail order untuk list
    const tblcustomer = document.getElementById('customer');
    const tblPackage = document.getElementById('package');
    const tblDuration = document.getElementById('duration');
    const tblPrice = document.getElementById('price');

    boxDetailOrder.style.display = "none";

// Menambahkan event listener untuk 'change' event
selectBox.addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const nilaiValue = selectedOption.value;
      // Mengambil nilai dari atribut data-
    const packagePrice = selectedOption.dataset.price;
    const customerList = selectedOption.dataset.name;
    const packageList = selectedOption.dataset.package;
    const bookingDuration = selectedOption.dataset.duration;

    //show detail booking order
    boxDetailOrder.style.display = "block";

    // Menempatkan nilai tersebut ke dalam textbox
    const aftertoRupiah = packagePrice*bookingDuration;
    let formatRupiah = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(aftertoRupiah);
    let packagePriceRupiah = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(packagePrice);
    grandtotal.value = formatRupiah;
    tblcustomer.textContent = customerList;
    tblPackage.textContent = packageList;
    tblDuration.textContent = bookingDuration+ " Jam";
    tblPrice.textContent = packagePriceRupiah;
});

function bacaGambar(input) {
  if(input.files && input.files[0]){
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#file_reload').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

$('#payment_rec').change(function(){
  bacaGambar(this);
})

new DataTable('#customer');
