<?php
// Fungsi untuk mengenkripsi teks dengan Caesar Cipher
function caesar_encrypt($text, $shift) {
    $result = "";
    
    // Looping setiap karakter dalam teks
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        
        // Memeriksa apakah karakter adalah huruf besar
        if (ctype_upper($char)) {
            // Menggeser karakter sesuai shift
            $result .= chr((ord($char) + $shift - 65) % 26 + 65);
        }
        // Memeriksa apakah karakter adalah huruf kecil
        elseif (ctype_lower($char)) {
            $result .= chr((ord($char) + $shift - 97) % 26 + 97);
        }
        // Jika bukan huruf, biarkan tanpa perubahan
        else {
            $result .= $char;
        }
    }
    return $result;
}

// Fungsi untuk mendekripsi teks dengan Caesar Cipher
function caesar_decrypt($text, $shift) {
    // Menggeser dengan negatif dari shift untuk dekripsi
    return caesar_encrypt($text, 26 - $shift);
}

// Contoh penggunaan
$plain_text = "Halo Dunia!";
$shift = 3;

// Enkripsi
$encrypted_text = caesar_encrypt($plain_text, $shift);
echo "Teks terenkripsi: " . $encrypted_text . "\n";

// Dekripsi
$decrypted_text = caesar_decrypt($encrypted_text, $shift);
echo "Teks terdekripsi: " . $decrypted_text . "\n";
?>