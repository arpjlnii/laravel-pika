<!DOCTYPE html>
<html>
    <head>
        <title>Sing in</title>
    </head>
    <Body>
        <h1>Buat Account Baru</h1>
        <h3>sign up forum</h3>

        <form action="/selesai " id="selesai">
            <!-- nama depan -->
            <label for="First name" id="nama depan" requrired>First Name: </label><br><br>
            <input type="text" placeholder="Nama depan"><br><br>

            <!-- nama belakang -->
            <label for="Last name" id="Nama Depan">Last Name:</label><br><br>
            <input type="text" placeholder="Nama Belakang"><br><br>

            <!-- gender -->
             <label for="gerder" id="jenis kelamin">Gender:</label><br><br>
             <label for="Laki-Laki" id="Male">Laki-Laki</label>
             <input type="radio" name="gender"><br><br>
             <label for="Perempuan" id="Female">Perempuan</label>
             <input type="radio" name="gender"><br><br>

             <!-- nasionalitas -->
              <label for="nationality" id="asal negara">Nationality:</label><br><br>
              <select name="Nationality" id="asal negara">
                <option disabled>pilih salah satu!</option>
                <option>Indonesia</option>
                <option>United State</option>
                <option>Russia</option>
              </select><br><br>

              <!-- Bahasa -->
               <label for="Languange skopen" id="bahawa berbicara">Language Spoken:</label><br><br>
               <input type="checkbox" name="bahasa Indonesia">
               <label for="Indonesia" id="bahasa">Bahasa Indonesia</label><br><br>
               <input type="checkbox" name="bahasa Inggris">
               <label for="inggris" id="bahasa">Baha inggris</label><br><br>
               <input type="checkbox" name="bahasa Russia">
               <label for="Russia" id="bahasa">Bahasa Russia</label><br><br>

               <!-- Bio -->
                <label for="bio" id="tekerangan">Bio:</label><br><br>
                <textarea cols="40" rows="12"></textarea><br><br>

              <!-- Sign In -->
              <input type="submit" Value="submit">

                 
                 
              





        </form>



    </Body>
</html>