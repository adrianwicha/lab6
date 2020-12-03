# Laboratorium 6 - Docker Compose. 

Adrian Wicha

## Uruchomienie aplikacji

```
git clone https://github.com/adrianwicha/lab6_compose_wicha.git
cd lab6_wicha
docker-compose up
```

Aby uruchomić należy w przeglądarce Mozilla Firefox zezwolić na jej połączenie się poprzez port 6666. W tym celu na pasku adresu URL wpisujemy `about:config` a potem dodajemy nową preferencję typu `string` o nazwie `network.security.ports.banned.override`. Należy nadać jej wartość `6666`. 

Gdy już tego dokonamy, należy przejść do folderu projektu i wpisac polecenie `docker-compose up`, a po wystartowaniu się wszystkich kontenerów w przeglądarce przejść na adres `localhost:6666`.

