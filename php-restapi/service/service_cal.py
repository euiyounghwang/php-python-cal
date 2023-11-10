    

class service_handler(object):
    
    def __init__(self, calobj):
        self.calobj = calobj
    
    async def excute_cal(self, arg1, arg2, operator):
        if operator == "+":
            return self.calobj.plus(arg1, arg2)
        elif operator == "-":
            return self.calobj.minus(arg1, arg2)
        elif operator == "*":
            return self.calobj.multiply(arg1, arg2)
        elif operator == "/":
            return self.calobj.divide(arg1, arg2)