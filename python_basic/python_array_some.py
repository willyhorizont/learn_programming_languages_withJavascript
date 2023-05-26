def python_array_some():
    print('JavaScript-like Array.some() in Python List\n')

    numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254]

    is_any_numbers_less_than500 = any([number < 500 for number in numbers])
    print('is any numbers < 500:', is_any_numbers_less_than500)
    # is any numbers < 500: True

    is_any_numbers_more_than500 = any([number > 500 for number in numbers])
    print('is any numbers > 500:', is_any_numbers_more_than500, '\n\n')
    # is any numbers > 500: False

    # ======================================================================================================================================================

    print('JavaScript-like Array.some() in Python List of Dict\n')

    products = [
        {'id': 'id_1', 'price': 30},
        {'id': 'id_2', 'price': 233},
        {'id': 'id_3', 'price': 5},
        {'id': 'id_4', 'price': 499}
    ]

    is_any_products_price_less_than500 = any([product['price'] < 500 for product in products])
    print('is any products price < 500:', is_any_products_price_less_than500)
    # is any products price < 500: True

    is_any_products_price_more_than500 = any([product['price'] > 500 for product in products])
    print('is any products price > 500:', is_any_products_price_more_than500)
    # is any products price > 500: False


if __name__ == '__main__':
    python_array_some()
