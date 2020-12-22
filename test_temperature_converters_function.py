import unittest
from temperature_converters import fahrenheit_to_celsius


class TempTest(unittest.TestCase):

    def test_fahrenheit_to_celsius1(self):
        result = fahrenheit_to_celsius(32.0)  # 32.0 degrees Fahrenheit should convert to 0.0 degrees Celsius
        self.assertEqual(result, 0.0)

    def test_fahrenheit_to_celsius2(self):
        result = fahrenheit_to_celsius(59.0)  # 59.0 degrees Fahrenheit should convert to 15.0 degrees Celsius
        self.assertEqual(result, 15.0)
