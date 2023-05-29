import json


def python_string_split():
    print('Split String in Python\n')

    text = 'foo.bar.baz'
    splitter = '.'
    textSplitted = text.split(splitter)
    textSplittedFormatted = json.dumps(textSplitted)
    print(f'"{text}" splitted by "{splitter}": {textSplittedFormatted}\n')
    # "foo.bar.baz" splitted by ".": ["foo","bar","baz"]

    text = 'JavaScript, Python, PHP'
    splitter = ', '
    textSplitted = text.split(splitter)
    textSplittedFormatted = json.dumps(textSplitted)
    print(f'"{text}" splitted by "{splitter}": {textSplittedFormatted}')
    # "JavaScript, Python, PHP" splitted by ", ": ["JavaScript","Python","PHP"]


if __name__ == '__main__':
    python_string_split()
