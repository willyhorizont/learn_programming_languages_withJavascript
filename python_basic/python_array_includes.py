def python_array_includes():
    print('JavaScript-like Array.includes() in Python\n')
    
    def what_is_your_name(name):
        my_friends = ['Tony', 'Ezekiel']
        print(f'name: {name}')

        if name in my_friends:
            print(f'F You {name}!\n')
            return
        print(f'Hi {name}!\n')

    what_is_your_name('Alisa')
    what_is_your_name('Tony')
    what_is_your_name('Ezekiel')


if __name__ == '__main__':
    python_array_includes()
