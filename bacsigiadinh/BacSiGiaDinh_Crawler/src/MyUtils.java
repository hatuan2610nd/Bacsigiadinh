import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.PrintWriter;

public class MyUtils {
	public static void WriteToFile(String fileName,String content)
	{
		try {
			File file = new File(fileName);
			file.createNewFile();
			PrintWriter writer = new PrintWriter(file);
			writer.println(content);
			writer.flush();
			writer.close();
		} catch (Exception e) {
			e.printStackTrace();
		}
		
	}
}
