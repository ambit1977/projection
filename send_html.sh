send_html() {
    TO=$1
    SUBJECT=$2
    HTMLFILE=$3
    (echo "To: ${TO}"; echo "Subject: ${SUBJECT}"; echo 'Mime-Version: 1.0'; echo 'Content-Type: text/html'; echo ) \
    | cat - ${HTMLFILE} | sendmail -t
}

#send_html "my@mailaddr.com" "kenmei" a.html
