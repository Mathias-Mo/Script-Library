def gcd (a,b):
    while a != b:
        if b > a:
            a, b = b, a
        a = a - b
    return a
