<?php

return [
    'alipay' => [
        'app_id'         => '2016091700532809',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxXvfH7ujJL3WueZcAfjzRYynqs6bkWG7tSzUon3+AQtX0kbS+dRivpQG+IvdIPFIkeP2XpU6adMJF74YgngG010vS0YIRBdkK9OZbXNj/21n2PAAyfhHMJqX2z8W4D2YpUD+ntYrr8UbhFW5bLF+FSt9Ug/b4CAGk/pv/7pqQQOm9slnrci0ijo8Hajv4lCVBFz7QG1CFzj1g7h3QFe3xYzQ6KLL1i+xOyBkJPE/YsiUEf2/C9DplxeZMPF3D3qul3KkfsjgncP0u/O8OWoWp4N3/ZzKl+5lkzIN9rAZIGAG0+sv6F4pRT/476lh6WR3JCe4awr77xkispWjxm1BcwIDAQAB',
        'private_key'    => 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCKBzjMLrTP+BJnIx8cOVufYdqqRhhx89Y4EwpR+ykIaOEUEyeWj9MKGrclVPc8oU6bE7U0IwMgpLa2M/PXywao07Qtft6WPVpRyCSe/TDlHuf+BQVXSnYnyTPBmnCe27N88ZzpaaxZwqivlPhzI6YE5n4mCQWY5gIOVr5rjKDA8Blx/rojdZWD/cZn5Q1xd8DSkvfiiyNQL67hp3d2Xsugqvj031uKEuZFgRsA6gj/uG1YZiNmrI/CCNf5/8uIX7DPU+TgfWFjSc34GeYnUmH5CG8PMapx1jEvk3JtVtLlFs90rlT17yKRQjPL6i4wbjybpiOIVZxrFWpJ6Z0tI5iHAgMBAAECggEAMdFleJyq+h0JV1xf0CoLnb0N1UMzc32UpeyJXwmNx9FC26IGOdtzSkRWMg02pxV5b5NvZX/1kwSgRab+rbZDkw/GCl2uLP+756SbQx8TVL8Q8KgTQ2xGtRlzqr75Qvz9DW2POte/My6E/8p+2d/V/hLLGSNMd+EcgNxiIiNBqiD2+oQIr2kCxiJRNotvS3Ts+TLC8NKGFf84/NF+ZfEGPo5a3ZSpuKiGrbvLL9LuMcuUKrU1E7mAmfUUNRezPde3tf3zfqadRCbzyqQOe15XOrG0u7mXw91YS+6bqEorjStXknqyZbFSTxRsufwEzgDPLJdUaBF22QnDaQtjP5XYoQKBgQC+EX0u5aIixusW5F7yiE2rohqXIHumYGS9p9NoGytk/AYUuheWUG3Uag2ba94NgLMYovuS8kA+wJXV3OEvOBmTg9Fj0YBEsF7KO6TnshbVZ75sRUZg5kC6XaeGiU7RJ4fmSmlMPtr5XNn0i42/5GQqxidl5lB80b6j7sBJQAtLCQKBgQC56HMjANqs/tz4BDhmYO0JwlzuG2AK1pVWcHTDid/ekCk82LXP8m3F4Q1dj088A2KDwzuYmuF1LlLXZ9GdRVqusK8ZZGwAmEq1n1LvAmUaDV86xRaxGkelsKoaLjY+OY4Ui14yuYGOhb4dzgsv6i9JeBb7zhHc1tOvfWVTX95bDwKBgCJUTFT1GuTHItz+oHuTzNuMKttS/aJeVLPApTlvdtYFgx+pQOtgWYX9JboFsJSlwzNW9LNk19+9rxJyk6WQr2XqcB5kT5OYe3ZxcWZ7zw36b/VkScLks5o1ojV1hWvXhP8+P2iLDcfuUluN/StEmCb1pVYNVEpHI/S+AbL5Q1DpAoGBAI/fvFNHkvS1HQ94PKnGs0uNNtwzJWXd4Z8O0t6NckrNKIzlbfdrt9afL/fLM9fPCsvMKPAWVQuZ+RSpTQi4ptBw/mHZXNgtBAyBK+663MGHvb4+zyvqma46BbrTLrmDU1jE7va0p/ZDvPlV/0RqqYPjQ25GcX6GZzb2BZe7ptqzAoGAakRvZn0+eEbTpDme9iAEaw9F5wKc7Z3SnWrAIKH6wYWbnvZOOiiCjRS7y3QZBRD6ZKUvJgXtS6VarzpVzZ2KqGfGYJlUiipYFHxP+c2HAs/YKM1QmOnjszVgrKym/mg9mRuzJRFKrNz7nblxT7xQeiqtFVIqwUIowQJEddOGSX4=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];