# This is a C++ style single-line comment
# This is a C++ style single-line comment
# This is a C++ style single-line comment

def FizzBuzz(n):
    for i in range(1, n+1):
        if (i % 3 == 0 and i % 5 == 0):
            print('FizzBuzz')

        elif (i % 3 == 0):
            print("Fizz")
        
        elif (i % 5 == 0):
            print("Buzz")
    
        else:
            print(i)

FizzBuzz(43)

# This is a C++ style single-line comment
# This is a C++ style single-line comment
# This is a C++ style single-line comment


def palindrome(s):
    string_cleaned = s.lower().replace(" ","")
    string_reversed = string_cleaned[::-1]
    return (string_cleaned == string_reversed)

print(palindrome('radar'))


# This is a C++ style single-line comment
# This is a C++ style single-line comment
# This is a C++ style single-line comment


def secondLargest(array):
    largest=0
    secondLargest=0
    for array as a:
         if (a > largest):
            secondLargest = largest
            largest = a
        elif (num > secondLargest and num < largest):
            secondLargest = num
return secondLargest

array = [1,98,84,23,54,88,3,6,9,199]
echo findsecondLargest(array)















