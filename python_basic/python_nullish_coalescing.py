def python_nullish_coalescing():
    print('Nullish Coalescing (??) in Python\n')

    products = [
        { 'id': 'product_1', 'name': 'product_name_1', 'price': 1 },
        { 'id': 'product_2', 'name': 'product_name_2', 'price': 2 },
        { 'id': 'product_3', 'name': 'product_name_3', 'price': 3 },
        { 'id': 'product_4', 'name': 'product_name_4', 'price': 4 },
    ]

    # There's no nullish coalescing in Python.
    # But, we can create our own function to achieve the same thing in Python.

    nullish_coalescing = lambda value, default_value: value if value is not None else default_value

    update_product = lambda id, name, price: list(map(lambda product: { **product, 'name': nullish_coalescing(value=name, default_value=product['name']), 'price': nullish_coalescing(value=price, default_value=product['price']) } if product['id'] == id else product, products))

    update_product_result1 = update_product(id='product_1', name=None, price=None)
    print('update_product_result1:', update_product_result1, '\n\n')
    # update_product_result1: [{"id":"product_1","name":"product_name_1","price":1},{"id":"product_2","name":"product_name_2","price":2},{"id":"product_3","name":"product_name_3","price":3},{"id":"product_4","name":"product_name_4","price":4}]

    update_product_result2 = update_product(id='product_1', name='Coca cola', price=2)
    print('update_product_result2:', update_product_result2)
    # update_product_result2: [{"id":"product_1","name":"Coca cola","price":2},{"id":"product_2","name":"product_name_2","price":2},{"id":"product_3","name":"product_name_3","price":3},{"id":"product_4","name":"product_name_4","price":4}]


if __name__ == '__main__':
    python_nullish_coalescing()
