module Constant


  MONTHS = [
      ["January", 1],
      ["February", 2],
      ["March", 3],
      ["April", 4],
      ["May", 5],
      ["June", 6],
      ["July", 7],
      ["August", 8],
      ["September", 9],
      ["October", 10],
      ["November", 11],
      ["December", 12],
    ]

  DAYS = [
      []
    ]

  YEAR_LEVELS = [
    ["1st year", "first1"],
    ["1st year irregular", "first2"],
    ["2nd year", "second1"],
    ["2nd year irregular", "second2"],
    ["3rd year", "third1"],
    ["3rd year irregular", "third2"],
    ["4th year", "fourth1"],
    ["4th year irregular", "fourth2"],
    ["Graduate", "graduate"]
  ]

  def self.months
    @months = MONTHS
  end
  
  def self.days
    @days = []
    for i in 1..31
      @days << [i,i]
    end
    @days
  end

  def self.years
    @years = []
    start = 1901
    dend = Time.now.year
    for i in start..dend
      @years << [i, i]
    end
  end
  

  
end