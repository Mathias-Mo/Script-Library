def convertBinary2Decimal (binaryList):
    binaryList = list(reversed(binaryList))
    result = 0
    while len(binaryList) > 0:
        result = result + binaryList.pop()
        result = result * 2
    return result // 2
