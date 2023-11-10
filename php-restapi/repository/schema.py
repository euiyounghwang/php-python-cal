
from pydantic import BaseModel

class Cal(BaseModel):
    args1: int = 1
    args2: int = 20
    operator: str = '+'
    
    def to_json(self):
        return {
            'args1' : self.args1,
            'args2' : self.args2,
            'operator' : self.operator,
        }