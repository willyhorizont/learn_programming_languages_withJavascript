import requests
import json


def python_http_request():
    print('HTTP Request in Python\n')

    http_request_result = requests.get('https://jsonplaceholder.typicode.com/todos/1')
    http_request_result_formatted = json.dumps(http_request_result.json(), indent=4)
    print(f'http request result: {http_request_result_formatted}')
    # http request result: {
    #     "userId": 1,
    #     "id": 1,
    #     "title": "delectus aut autem",
    #     "completed": false
    # }


if __name__ == '__main__':
    python_http_request()
