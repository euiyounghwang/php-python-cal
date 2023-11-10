

## Two ways build a Calculator
- PHP UI based using Form/Post based on Cal Class (<i>http://localhost:3000/php-python-cal/php-ui/main.php</i>)
- PHP UI based using jquery based on REST API built FASTAPI (<i>http://localhost:7777/docs</i>)
- Install Poerty
```
https://python-poetry.org/docs/?ref=dylancastillo.co#installing-with-the-official-installer
```

Using Python Virtual Environment
```bash
python -m venv .venv
source .venv/bin/activate
```

Using Poetry: Create the virtual environment in the same directory as the project and install the dependencies:
```bash
poetry config virtualenvs.in-project true
poetry init
poetry add fastapi
poetry add uvicorn
poetry add pytz
```
