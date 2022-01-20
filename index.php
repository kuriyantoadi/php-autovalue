<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </head>
  <body>
    <form>
    <select name="package" id="package">
        <option data-price="100000" data-discount="10">Paket 1</option>
        <option data-price="150000" data-discount="10">Paket 2</option>
        <option data-price="200000" data-discount="10">Paket 3</option>
    </select>

    <div>
        <label for="price">Harga</label>
        <input type="text" name="price" readonly />
        <br>
        <label for="price">Discount</label>
        <input type="text" name="discount" readonly />
        <br>
        <h4>Total: <span id="total">0</span></h4>
    </div>

</form>
  </body>
  <script type="text/javascript">
    $('#package').on('change', function(){
    // ambil data dari elemen option yang dipilih
    const price = $('#package option:selected').data('price');
    const discount = $('#package option:selected').data('discount');

    // kalkulasi total harga
    const totalDiscount = (price * discount/100)
    const total = price - totalDiscount;

    // tampilkan data ke element
    $('[name=price]').val(price);
    $('[name=discount]').val(totalDiscount);

    $('#total').text(`Rp ${total}`);
    });
  </script>
</html>
