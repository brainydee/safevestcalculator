//Create a function to calculate APR
//create another to calculate Total Returns
//Fire the function to run for every event on the input

let text         = document.querySelector('#apr-result')

let totalreturns = document.querySelector('#total-returns')

text.textContent = 0

totalreturns.textContent = 0




const calculateAPR = (investmentDuration, investmentSize)=>{

    const result = investmentDuration * investmentSize * 100     

    text.textContent = result.toFixed(1)

}


const calculateReturns = (a, b, c)=>{

    const output  = (a * b  * c)

    const final   =  Number(output) + Number(a)

    const formatter = new Intl.NumberFormat('en')

    totalreturns.textContent =  formatter.format(final.toFixed(1))

}

document.querySelector('#investment-duration').addEventListener('change', (e)=>{

    const investmentDuration = e.target.value

    const investmentSize     = document.querySelector('#investment-size').value

    const investmentAmount   = document.querySelector('#investment-amount').value

    calculateAPR(investmentDuration, investmentSize)

    calculateReturns(investmentAmount, investmentDuration, investmentSize)
    

})



document.querySelector('#investment-size').addEventListener('change', (e)=>{

    const investmentDuration =  document.querySelector('#investment-duration').value

    const investmentSize     = e.target.value

    const investmentAmount   = document.querySelector('#investment-amount').value

    calculateAPR(investmentDuration, investmentSize)

    calculateReturns(investmentAmount, investmentDuration, investmentSize)
    

})



document.querySelector('#investment-amount').addEventListener('input', (e)=>{

    const investmentAmount   = e.target.value

    const investmentDuration =  document.querySelector('#investment-duration').value

    const investmentSize     = document.querySelector('#investment-size').value


    calculateReturns(investmentAmount, investmentDuration, investmentSize)

})




