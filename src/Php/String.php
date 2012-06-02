<?php

namespace Php;

final class String
{
    /**
     * Quote string with slashes in a C style
     * 
     * @param string $string The string to be escaped
     * @param string $charList A list of characters to be escaped. 
     * If charlist contains characters \n, \r etc., they are converted in C-like style, 
     * while other non-alphanumeric characters with ASCII codes lower than 32 
     * and higher than 126 converted to octal representation.
     * @return Returns a string with backslashes before characters that are listed in $charList parameter.
     * 
     * @see http://www.php.net/manual/en/function.addcslashes.php
     * @origin addcslashes
     * // TODO: copy the rest of manual?
     */
    final static public function addCSlashes($string, $charList)
    {
        return addcslashes($string, $charList);
    }
    
    /**
     * Convert binary data into hexadecimal representation
     * Returns an ASCII string containing the hexadecimal representation of str. 
     * The conversion is done byte-wise with the high-nibble first
     * 
     * @param string $string
     * @return string hexadecimal representation of the given string
     * 
     * @see http://www.php.net/manual/en/function.bin2hex.php
     */
    final static public function binToHex($string)
    {
        return bin2hex($string);
    }
    
    /**
     * Returns a one-character string containing the character specified by ascii. 
     * This function complements ord().
     * 
     * @param int $asciiCode The ascii code
     * @return string Returns the specified character
     * 
     * @see http://www.php.net/manual/en/function.chr.php
     */
    final static public function getAsciiChar($asciiCode)
    {
        return chr($asciiCode);
    }
    
    /**
     * Split a string into smaller chunks
     * Can be used to split a string into smaller chunks which is useful for 
     * e.g. converting base64_encode() output to match RFC 2045 semantics. 
     * It inserts end every chunklen characters.
     * 
     * @param string $body The string to be chunked
     * @param int $chunkLength The chunk length
     * @param string $lineEnding The line ending sequence
     * @return string Returns the chunked string
     * 
     * @see http://www.php.net/manual/en/function.chunk-split.php
     */
    final static public function chunkSplit($body, $chunkLength = 76, $lineEnding = "\r\n")
    {
        return chunk_split($body, $chunkLength, $lineEnding);
    }
}