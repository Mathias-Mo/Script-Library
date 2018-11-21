from random import shuffle

def init():
    user_hint = [3, 17, 27, 39, 46, 47]
    drawing = []
    compared = []
    max_draw = 6
    if len(user_hint) < max_draw:
        print("Too less hints")
    else:
        pool = list(range(1, 50))
        shuffle(pool)
        for i in range(max_draw):
            drawing.append(pool[i])

    print('Numbers drawed: '+str(drawing))

    for digit in user_hint:
        if digit in drawing:
            compared.append(digit)

    num_compared = len(compared)

    if num_compared == 0:
        print('Drawing does not compare to your hint')
    elif num_compared > 0:
        print(str(num_compared)+' number(s) are compared')

    if num_compared == 6:
        print('Hurra! You are a billionaire')


if __name__ == '__main__':
    init()
